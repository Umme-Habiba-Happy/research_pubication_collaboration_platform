@extends('frontend.master')
@extends('frontend.partial.profile')
@section('content')


<nav class="navbar navbar-expand-lg navbar-light bg-light">


    <div>
        <ul class="nav navbar-nav">

            <li><a href="{{route('profile.profile')}}">Profile</a></li>
            <li><a href="{{route('profile.research')}}">Research</a></li>
            <li><a href="{{route('profile.stats')}}">Stats</a></li>

        </ul>
</nav>
<hr>
<div>hello stats</div>




<div class="nova-legacy-c-tabs__items" role="menubar">
<div class="nova-legacy-c-tabs__items" role="menubar">
    <button type="button" class="nova-legacy-c-tabs__item profile-stats-tabs__styled-tab" aria-disabled="false" role="menuitem" data-testid="profileStatsTabsRecommendations">
        <div>
            <div class="nova-legacy-o-stack">
                <div class="nova-legacy-o-stack__item">
                    <div class="nova-legacy-e-text nova-legacy-e-text--size-xxxl nova-legacy-e-text--family-display nova-legacy-e-text--color-inherit profile-stats-tab__count">0</div>
                    <div class="nova-legacy-l-flex__item nova-legacy-l-flex">
                        <div class="nova-legacy-l-flex__item">
                            <div class="nova-legacy-e-text nova-legacy-e-text--size-s nova-legacy-e-text--family-sans-serif nova-legacy-e-text--color-grey-900">Recommendations</div>
                        </div>
                    </div>
                </div>
                <div class="nova-legacy-o-stack__item">
                    <div class="nova-legacy-o-media-object nova-legacy-c-qualifier nova-legacy-c-qualifier--secondary nova-legacy-c-qualifier--s profile-stats-tab__trend">
                        <div class="nova-legacy-o-media-object__item nova-legacy-c-qualifier__icon">
                            <svg aria-hidden="true" class="nova-legacy-e-icon nova-legacy-e-icon--size-s nova-legacy-e-icon--color-inherit nova-legacy-e-icon--luminosity-medium">
                                <use xlink:href="/m/4397705295085843/images/icons/nova/icon-stack-s.svg#chart-line-stable-s"></use>
                            </svg>
                        </div>
                        <div class="nova-legacy-o-media-object__item nova-legacy-c-qualifier__labels">
                            <div class="nova-legacy-e-text nova-legacy-e-text--size-m nova-legacy-e-text--family-sans-serif nova-legacy-e-text--color-inherit nova-legacy-c-qualifier__label">---</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </button>
</div>

</div>
@endsection