<div id="wrapper" :class="{'col-lg-2 col-md-3': sidebarOpen, 'col-lg-1 col-md-1 mr-lg-5 mr-md-5': !sidebarOpen}" class="px-0">
    <div id="sidebar-wrapper" class="mt-4 d-lg-block d-md-block d-none">
        <div class="link pl-lg-5 pl-md-4 py-1" :class="{'active': activeTab == 'quotes'}" @click="switchTab('quotes')">
            <i class="fa fa-quote-right mr-3" aria-hidden="true"></i><span v-if="sidebarOpen">Quotes</span>
        </div>
        <div class="link mt-2 pl-lg-5 pl-md-4 py-1" :class="{'active': activeTab == 'favorites'}" @click="switchTab('favorites')">
            <i class="fa fa-heart-o" aria-hidden="true"></i><span class="ml-3" v-if="sidebarOpen">Favorites</span>
        </div>
        <a href="https://www.instagram.com/sapphirestoriess/" target="_blank">
            <div class="link mt-2 pl-lg-5 pl-md-4 py-1">
                <i class="fa fa-instagram" aria-hidden="true"></i><span class="ml-3" v-if="sidebarOpen">Follow our IG</span>
            </div>
        </a>
    </div>
</div>

<div id="wrapper" class="d-lg-none d-md-none" :class="{'open': sidebarOpen}">
    <div id="sidebar-wrapper" class="d-lg-none">
        <button @click="openSidebar">
            <i class="fa fa-times"></i>
        </button>
        <div class="mt-5">
            <div class="link pl-5 py-1 " :class="{'active': activeTab == 'quotes'}" @click="switchTabSidebar('quotes')">
                <i class="fa fa-quote-right mr-3" aria-hidden="true"></i>Quotes
            </div>
            <div class="link mt-2 py-1 pl-5" :class="{'active': activeTab == 'favorites'}" @click="switchTabSidebar('favorites')">
                <i class="fa fa-heart-o mr-3" aria-hidden="true"></i>Favorites
            </div>
            <a href="https://www.instagram.com/sapphirestoriess/" target="_blank">
                <div class="link mt-2 pl-5 py-1">
                    <i class="fa fa-instagram mr-3" aria-hidden="true"></i>Follow our IG
                </div>
            </a>
        </div>
    </div>
</div>
