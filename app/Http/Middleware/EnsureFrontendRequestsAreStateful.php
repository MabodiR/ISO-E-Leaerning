<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureFrontendRequestsAreStateful
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

        /**
     * Add the CSRF token to the response cookies.
     *
     * @param  \Symfony\Component\HttpFoundation\Response  $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function addCookieToResponse($response)
    {
        $response->headers->setCookie(
            new Cookie(
                'XSRF-TOKEN',
                $this->encrypter->encrypt(csrf_token()),
                $this->availableAt(60),
                $this->config->get('session.path'),
                $this->config->get('session.domain'),
                $this->config->get('session.secure'),
                false,
                false,
                $this->config->get('session.same_site', null)
            )
        );

        return $response;
    }
}
