<div class="community-filter" x-data="{show : false}" @click.away="show = false">
    <div @click="show = !show" class="dropdown-button">
        <i class="fas fa-users"></i>
        <i class="fas fa-caret-down"></i>
        <div x-show="show" class="communities-menu">
            
        </div>
    </div>
</div>