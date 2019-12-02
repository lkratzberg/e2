<?php
namespace App\Controllers;

class ProductController extends Controller
{
  private $products;

  public function __construct($app)
  {
    parent::__construct($app);
  }

  public function index()
  {
    return $this->app->view('products.index', [
      'products' =>     $products = $this->app->db()->all('products')
    ]);
  }

  public function show()
  {
    $id = $this->app->param('id');
    if(is_null($id))
    {
      $this->app->redirect('/products');
    }
    $product = $this->app->db()->findById('products',$id);

    if(is_null($product))
    {
      return $this->app->view('products.missing');
    }

    # Load the review details
    $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);
    # If the user submitted the review form, we'll have a confirmation name
    # that we'll pass to the view to show them a confirmation message
    $confirmationName = $this->app->old('confirmationName');

    return $this->app->view('products.show', [
        'product' => $product,
        'reviews' => $reviews,
        'confirmationName' => $confirmationName
    ]);
  }

  public function saveReview()
  {
    $this->app->validate([
      'name' => 'required',
      'content' => 'required|minLength:200',
    ]);

    #If the above validation failes, the user is redirected back to the product page
    #and none of the following code will execute

    #Extract data from the form submission
    $name = $this->app->input('name');
    $content = $this->app->input('content');
    $id = $this->app->input('id');

    $data = [
      'name' => $name,
      'content' => $content,
      'product_id' => $id
    ];
    $this->app->db()->insert('reviews',$data);

    $this->app->redirect('product?id='.$id, ['confirmationName' => $name]);
  }
}
