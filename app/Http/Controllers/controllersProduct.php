<?php

namespace App\Http\Controllers;

class controllersProduct extends Controller
{
   public function product()
    {
        $productsArr = array([
                'name' => 'Fresh Chicken Salad',
                'price' => '10jd',
                'des' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'img' => 'assets/images/tab-item-01.png'],
                [
                'name' => 'Orange Juice',
                'price' => '8jd',
                'des' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'img' => 'assets/images/tab-item-02.png'],
                [
                'name' => 'Fruit Salad',
                'price' => '11jd',
                'des' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'img' => 'assets/images/tab-item-03.png'],
                [
                'name' => 'Eggs Omelette',
                'price' => '16jd',
                'des' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'img' => 'assets/images/tab-item-04.png'],
                [
                'name' => 'Dollma Pire',
                'price' => '9jd',
                'des' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'img' => 'assets/images/tab-item-05.png'],
                [
                'name' => 'Omelette & Cheese',
                'price' => '14jd',
                'des' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'img' => 'assets/images/tab-item-06.png'],

        );

        return view('index')->with('productsArr', $productsArr);
    }
}