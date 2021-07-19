<div id="usr-dropdown" x-data="{show : false}" @click.away="show = false">
    <div @click="show = !show" class="username">{{ auth()->user()->username }}</div>
    <div x-show="show" class="usr-options">
        <div><a href="/change-pic">Change profile pic</a></div>
    </div>
</div>