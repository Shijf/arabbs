<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GithubWebhooksContriller extends Controller
{
    //

    public function push()
    {
        $raw_post_data = file_get_contents('php://input', 'r');

        echo "-------\$_POST------------------\n";

        echo var_dump($_POST) . "\n";

        echo "-------php://input-------------\n";

        echo $raw_post_data . "\n";
    }
}
