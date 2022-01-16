<?php

namespace App\Exceptions;
//use App\Exceptions\InvalidOrderException;
//use App\Exceptions\PermissionDeniedException;
use jeremykenedy\LaravelRoles\App\Exceptions\PermissionDeniedException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     * 
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            
        });

        $this->renderable(function (PermissionDeniedException $e, $request) {
            
                return response()->view('errors.invalid-order',
                                        [], 500);
        });

    }
 





    //Facade\Ignition\Exceptions\ViewException

            //if (gettype($e) == 'object') {}

            //  if ($e instanceof PermissionDeniedException) {
                
            //  }
           
            // if ($exeption ) {
            //     # code...
            // }

           
              
            // if ($e instanceof PermissionDeniedException){
            //     return "Vous n'êtes pas aurisé à accéder à cette page"; 
            // }



}
