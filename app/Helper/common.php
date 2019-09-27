<?php

if (!function_exists('getConfig')) {
	 /**
     * @param $key
     * @param null $default
     * @return \Illuminate\Config\Repository|mixed
     */
	function getConfig($key, $default = null)
	{
		return config('config.' . $key, $default);
	}
}

if (! function_exists('getConstant')) {
    /**
     * @param $key
     * @param null $default
     * @return \Illuminate\Config\Repository|mixed
     */
    function getConstant($key, $default = null)
    {
        return config('constant.' . $key, $default);
    }
}

if (! function_exists('getMessage')) {
    /**
     * @param $key
     * @param array $params
     * @return array|\Illuminate\Contracts\Translation\Translator|null|string
     */
    function getMessage($key, $params = [])
    {
        return trans('messages.' . $key, $params);
    }
}

if (!function_exists('transa')) {
	/**
     * @param $key
     * @param array $params
     * @return array|\Illuminate\Contracts\Translation\Translator|null|string
     */
	function transa($key, $params = [])
	{
		return trans('actions.' . $key, $params);
	}
}

if (!function_exists('transm')) {
	/**
     * @param $key
     * @param array $params
     * @return array|\Illuminate\Contracts\Translation\Translator|null|string
     */
	function transm($key, $params = [])
	{
		return trans('model.' . $key, $params);
	}
}

if (!function_exists('logError')) {
    /**
     * @param $msg
     */
    function logError($msg)
    {
        dd($msg);
    }
}

if (! function_exists('backendGuard')) {
    /**
     * @return mixed
     */
    function backendGuard()
    {
        return Auth::guard('backend');
    }
}

if (!function_exists('isMobile')) {
    /**
     * @return bool
     */
    function isMobile()
    {
        if(array_key_exists('HTTP_USER_AGENT', $_SERVER)) {
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            return preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $userAgent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($userAgent, 0, 4));
        }
        return false;
    }
}

if (!function_exists('ebr')) {

    /**
     * @param $html
     * @param bool $showWhiteSpace
     * @return mixed|string
     */
    function ebr($html, $showWhiteSpace = false)
    {
        $string = nl2br(e($html));
        if (!$showWhiteSpace) {
            return $string;
        }
        $string = str_replace(' ', '&nbsp;', $string);
        return str_replace('　', '&nbsp;', $string);
    }
}

if (!function_exists('formatMoney')) {
    /**
     * @param $money
     * @return string
     */
    function formatMoney($money) {
        $format = number_format($money, 0, "," , ".");
        return $format;
    }
}

if (!function_exists('toSql')) {
    /**
     * @param $query
     * @return string
     */
    function toSql($query)
    {
        return str_replace_array('?', $query->getBindings(), $query->toSql());
    }
}

if (!function_exists('getCurrentRouteName')) {
    /**
     * @return mixed
     */
    function getCurrentRouteName()
    {
        $action = Request::route()->getAction();
        return array_get($action, 'as');
    }
}

if (!function_exists('getCurrentControllerName')) {
    /**
     * @return mixed
     */
    function getCurrentControllerName()
    {
        $action = Request::route()->getAction();
        $controller = class_basename($action['controller']);
        list($controllerName, $action) = explode('@', $controller);
        return $controllerName;
    }
}

if (!function_exists('getCurrentActionName')) {
    /**
     * @return mixed
     */
    function getCurrentActionName()
    {
        $routeName = getCurrentRouteName();
        return end(explode('.', $routeName));
    }
}

if (!function_exists('getActiveSidebarClass')) {
    /**
     * @param null $alias
     * @param null $action
     * @return string
     */
    function getActiveSidebarClass($alias = null, $action = null)
    {
        if (empty($alias)) {
            return '';
        }

        // For parent
        if (empty($action)) {
            $controllerName = getCurrentControllerName();
            return ($controllerName == ucfirst($alias) . 'Controller') ? 'active' : '';
        }

        // For child
        $routeName = getCurrentRouteName();
        return ($routeName == 'backend.' . $alias . '.' . $action) ? 'active' : '';
    }
}

if (!function_exists('getArrayKeys')) {
    /**
     * @param array $array
     * @return array
     */
    function getArrayKeys($array = [])
    {
        if (empty($array)) {
            return [];
        }
        $r = [];
        foreach ($array as $key => $value) {
            $r[$key] = $key;
        }
        return $r;
    }
}
