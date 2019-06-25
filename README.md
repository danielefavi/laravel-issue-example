# laravel-issue-example
Example for the issue: Laravel 5.8 and syncing event: Call to undefined method exception #28050

The release notes were misleading and they have been changed [https://github.com/laravel/docs/pull/5096](https://github.com/laravel/docs/pull/5096).

For more info [https://github.com/laravel/framework/issues/28050](https://github.com/laravel/framework/issues/28050)

# Installation
- `git clone https://github.com/danielefavi/laravel-issue-example.git`
- `composer install`
- set your **.env** file
- `php artisan migrate`
- `php artisan key:generate`

# Laravel 5.8 syncing / attaching / detaching events
On Laravel 5.8, when you are using the methods `sync`, `attach` or `detach` is going to be fired the appropriate model events (creating, updating, saving, ...) for the called action. Note that using `sync`, `attach` or `detach` is not going to fire any event like *syncing*, *attaching* or *detaching*.

More specifically, the sequence of events fired for each element passed to the `sync` method are:

 - saving
 - creating
 - created
 - saved

The sequence of events fired for each element passed to the `attach` method are:

 - saving
 - creating
 - created
 - saved

The sequence of events fired for each element passed to the `detach` method are:

 - deleting
 - deleted

So if you want to observe the syncing operation you actually have to observe the saving (or saved) event **from the pivot model** (in this case `ProjectUser`):

```
class ProjectUser extends Pivot
{
    public static function boot()
    {
        parent::boot();

        static::saving(function ($item)  {
			// this will die and dump on the first element passed to ->sync()
            dd($item);
        });
    }
}
```
