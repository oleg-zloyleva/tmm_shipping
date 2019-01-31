<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     host="localhost",
 *     basePath="/",
 *     @SWG\Info(
 *         version="0.1.0",
 *         title="TMM International inc API",
 *         description="Api description...",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="contact@mysite.com"
 *         ),
 *         @SWG\License(
 *             name="Private License",
 *             url="URL to the license"
 *         )
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Find out more about my website",
 *         url="http..."
 *     )
 * )
 */

/**
 * @SWG\SecurityScheme(
 *   securityDefinition="Authorization",
 *   type="apiKey",
 *   in="header",
 *   name="Authorization"
 * )
 */

/**
 *
 * @SWG\Tag(
 *   name="Emails"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
