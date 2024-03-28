<div id="notifications" class="fixed bottom-0 end-0 p-3" style="z-index: 99999">
    @if (count($errors))
        @foreach($errors->all() as $error)
            <div class="alert-danger anim_fadeInStayOut">
                <div class="alert-header">
                    <h4 class="alert-title">Error</h4>
                </div>
                <div class="alert-body">
                    <p>{{ $error }}</p>
                </div>
            </div>
        @endforeach
    @endif

    @if (session('error'))
            <div class="alert-danger anim_fadeInStayOut">
                <div class="alert-header">
                    <h4 class="alert-title">Error</h4>
                </div>
                <div class="alert-body">
                    <p>{{ session('error') }}</p>
                </div>
            </div>
    @endif

    @if (session('success'))
        <div class="alert-success anim_fadeInStayOut">
            <div class="alert-header">
                <h4 class="alert-title">Success</h4>
            </div>
            <div class="alert-body">
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif

    @if (session('warning'))
        <div class="alert-warning anim_fadeInStayOut">
            <div class="alert-header">
                <h4 class="alert-title">Warning</h4>
            </div>
            <div class="alert-body">
                <p>{{ session('warning') }}</p>
            </div>
        </div>
    @endif

    @if (session('info'))
        <div class="alert-info anim_fadeInStayOut">
            <div class="alert-header">
                <h4 class="alert-title">Info</h4>
            </div>
            <div class="alert-body">
                <p>{{ session('info') }}</p>
            </div>
        </div>
    @endif

    @if (session('light'))
        <div class="alert-light anim_fadeInStayOut">
            <div class="alert-header">
                <h4 class="alert-title">{{ config('app.name') }}</h4>
            </div>
            <div class="alert-body">
                <p>{{ session('light') }}</p>
            </div>
        </div>
    @endif

    @if (session('dark'))
        <div class="alert-opposite anim_fadeInStayOut">
            <div class="alert-header">
                <h4 class="alert-title">{{ config('app.name') }}</h4>
            </div>
            <div class="alert-body">
                <p>{{ session('dark') }}</p>
            </div>
        </div>
    @endif

    @if (session('main'))
        <div class="alert-main anim_fadeInStayOut">
            <div class="alert-header">
                <h4 class="alert-title">{{ config('app.name') }}</h4>
            </div>
            <div class="alert-body">
                <p>{{ session('main') }}</p>
            </div>
        </div>
    @endif

    <div class="alert-danger hidden">
        <div class="alert-header">
            <h4 class="alert-title">Error</h4>
        </div>
        <div class="alert-body"></div>
    </div>
    <div class="alert-success hidden">
        <div class="alert-header">
            <h4 class="alert-title">Success</h4>
        </div>
        <div class="alert-body">
            <p></p>
        </div>
    </div>
    <div class="alert-warning hidden">
        <div class="alert-header">
            <h4 class="alert-title">Warning</h4>
        </div>
        <div class="alert-body"></div>
    </div>
    <div class="alert-info hidden">
        <div class="alert-header">
            <h4 class="alert-title">Info</h4>
        </div>
        <div class="alert-body"></div>
    </div>
    <div class="alert-light hidden">
        <div class="alert-header">
            <h4 class="alert-title">{{ config('app.name') }}</h4>
        </div>
        <div class="alert-body"></div>
    </div>
    <div class="alert-opposite hidden">
        <div class="alert-header">
            <h4 class="alert-title">{{ config('app.name') }}</h4>
        </div>
        <div class="alert-body"></div>
    </div>
    <div class="alert-main hidden">
        <div class="alert-header">
            <h4 class="alert-title">{{ config('app.name') }}</h4>
        </div>
        <div class="alert-body"></div>
    </div>
</div>


