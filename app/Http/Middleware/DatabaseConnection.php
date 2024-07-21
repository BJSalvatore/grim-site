<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class DatabaseConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      try {
           DB::connection()->getPdo();
           if(DB::connection()->getDatabaseName()){
               echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
           }else{
               die("Could not find the database. Please check your configuration.");
           }
       } catch (\Exception $e) {
           die("Could not open connection to database server.  Please check your configuration.");
       }

        return $next($request);
    }
}
