<?php

namespace CMSlaravel\Composers;

use Illuminate\View\View;
use Illuminate\Auth\AuthManager;

class CurrentUserComposer
{

  public function compose(View $view)
  {
    $view->with('currentUser', \Auth::user());
  }

}
