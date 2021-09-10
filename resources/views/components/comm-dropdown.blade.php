<div class="community-filter" x-data="{show : false}" @click.away="show = false">
    <div @click="show = !show" class="dropdown-button">
        <div id="comms-icon">
            <i class="fas fa-users"></i>
            <i class="fas fa-caret-down"></i>
        </div>
        <div x-show="show" class="communities-menu">
            <i class="fas fa-spinner"></i>
        </div>
    </div>
</div>