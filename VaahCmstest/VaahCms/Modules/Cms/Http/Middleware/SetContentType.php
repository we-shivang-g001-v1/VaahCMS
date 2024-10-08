<?php  namespace VaahCms\Modules\Cms\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use VaahCms\Modules\Cms\Models\Content;
use VaahCms\Modules\Cms\Models\ContentTypeBase;

class SetContentType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $content = ContentTypeBase::where('slug', $request->content_type_slug)->first();

        //for controller
        $request->content_type = $content;

        //for view
        \View::share('content_type', $content);

        return $next($request);
    }
}
