<?php

namespace App\Models;

class Products
{
  private static $products = [
    [
        "title" => "Product 1",
        "slug" => "product-1",
        "code" => "P001",
        "height" => "10",
        "stock" => "10",
        "price" => "Call For The Price",
        "image" => "https://via.placeholder.com/150",
        "link" => "https://via.placeholder.com/150",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, doloremque, eius, exercitationem ipsam iste laborum magni mollitia nisi nisi odio officiis provident quibusdam quidem quo reiciendis repellendus repudiandae sint temporibus ullam voluptatum?",
    ],
    [
        "title" => "Product 2",
        "slug" => "product-2",
        "code" => "P002",
        "height" => "10",
        "stock" => "10",
        "price" => "Call For The Price",
        "image" => "https://via.placeholder.com/150",
        "link" => "https://via.placeholder.com/150",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, doloremque, eius, exercitationem ipsam iste laborum magni mollitia nisi nisi odio officiis provident quibusdam quidem quo reiciendis repellendus repudiandae sint temporibus ullam voluptatum?",
    ],
    [
        "title" => "Product 3",
        "slug" => "product-3",
        "code" => "P003",
        "height" => "10",
        "stock" => "10",
        "price" => "Call For The Price",
        "image" => "https://via.placeholder.com/150",
        "link" => "https://via.placeholder.com/150",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, doloremque, eius, exercitationem ipsam iste laborum magni mollitia nisi nisi odio officiis provident quibusdam quidem quo reiciendis repellendus repudiandae sint temporibus ullam voluptatum?",
    ],
    [
        "title" => "Product 4",
        "slug" => "product-4",
        "code" => "P004",
        "height" => "10",
        "stock" => "10",
        "price" => "Call For The Price",
        "image" => "https://via.placeholder.com/150",
        "link" => "https://via.placeholder.com/150",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, doloremque, eius,"
    ]
  ];
  //ngambil semua data lewat colection
  public static function all()
  {
    return collect(self::$products);
  }
  //ngambil satu data sesuai slug
  public static function find($slug){
    $products = static::all();
    return $products->firstWhere('slug', $slug);
  }
}
