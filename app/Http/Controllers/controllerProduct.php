<?php

namespace App\Http\Controllers;

class controllerProduct extends Controller
{
   public function product()
    {
        $productsArr = array([
                'name' => 'coffee',
                'price' => '6jd',
                'weight' => '5kg'],
            [
                'name' => 'bread',
                'price' => '1jd',
                'weight' => '3kg'],
            [
                'name' => 'mango',
                'price' => '2jd',
                'weight' => '1kg'],
            [
                'name' => 'apple',
                'price' => '1jd',
                'weight' => '1kg'],
            [
                'name' => 'milk',
                'price' => '2jd',
                'weight' => '2L'],
            [
                'name' => 'coffee',
                'price' => '6jd',
                'weight' => '5kg'
            ]
        );

        return view('product')->with('productsArr', $productsArr);
    }
}