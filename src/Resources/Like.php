<?php

namespace Codeat3\LaravelNovaLikeable\Resources;

use Conner\Likeable\Like as LikeableLike;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Resource;

class Like extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = LikeableLike::class;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Miscellaneous';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'likeable_id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'likeable_id', 'likeable_type',
    ];

    /**
     * Get the value that should be displayed to represent the resource.
     *
     * @return string
     */
    public function title()
    {
        return $this->likeable_id;
    }

    /**
     * Get the displayble label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Likes';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('ID', 'likeable_id'),
            Text::make('Type', 'likeable_type'),
            Text::make('User ID', 'user_id'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [

        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
