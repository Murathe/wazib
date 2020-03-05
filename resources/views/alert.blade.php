<div class="alert alert-danger">
    {{ $slot }}
</div>

@component('alert')
    <strong>Whoops!</strong> Something went wrong!
@endcomponent


<!-- ********************************************************** -->
<div class="alert alert-danger">
    <div class="alert-title">{{ $title }}</div>

    {{ $slot }}
</div>


@component('alert')
    @slot('title')
        Forbidden
    @endslot

    You are not allowed to access this resource!
@endcomponent

<!-- ************************************************************** -->
@component('alert', ['foo' => 'bar'])
    ...
@endcomponent

<!-- ***********Displaying data from Js variable********** -->
@verbatim
    <div class="container">
        Hello, {{ name }}.
    </div>
@endverbatim



{{-- **************If Statements************** --}}
{{-- @if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I dont have any records!
@endif --}}

{{-- @unless (Auth::check())
    You are not signed in.
@endunless --}}

{{-- @isset($records)
    // $records is defined and is not null...
@endisset

@empty($records)
    // $records is "empty"...
@endempty --}}



{{-- *******Loop*************** --}}
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse

@while (true)
    <p>I'm looping forever.</p>
@endwhile



@foreach ($users as $user)
    @if ($user->type == 1)
        @continue
    @endif

    <li>{{ $user->name }}</li>

    @if ($user->number == 5)
        @break
    @endif
@endforeach


@foreach ($users as $user)
    @continue($user->type == 1)

    <li>{{ $user->name }}</li>

    @break($user->number == 5)
@endforeach
