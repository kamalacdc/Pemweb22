<?php namespace App\Controllers;

 class Page extends BaseController 
{
    public function about()
    {
        echo "<h2>about page";
    }
    public function kontak()
    {
        echo "<h2>kontak page";
    }
    public function faqs()
    {
        echo "<h2>faqs page";
    }
    public function tos()
    {
        echo "<h2>halaman term of services";
    }
    public function bio()
    {
        echo "<h1>BIODATA<h2>";
        
        echo "Nama : ahmad dian kamal<h2>";

        echo "Alamat : Tambar Jogoroto<h2>";

        echo "TTL : Jombang 09 juni 2005<h2>";

        echo "Agama : islam";

    }
}