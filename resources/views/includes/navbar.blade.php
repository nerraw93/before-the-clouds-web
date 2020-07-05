{{-- DESKTOP NAVBAR --}}
<nav class="navbar navbar-expand-lg justify-content-between desktop-navbar">
    <div>
        <button class="btn sidebar-toggle" @click="openSidebar">
            <svg class="bi bi-layout-sidebar" width="22px" height="22px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M4 14V2h1v12H4z"/>
            </svg>
        </button>
        <img class="logo-img ml-lg-2" src="/images/BTCLogoPrimary.png">
    </div>
    <div class="d-lg-flex btn-filter" >
        <div v-if="showCategories" class="row ml-auto">
            <button class="filter" :class="{'active': activeTab == 'quotes'}" @click="switchTab('quotes')">Quotes</button>
            <button class="filter mx-3" :class="{'active': activeTab == 'videos'}" @click="switchTab('videos')">Videos</button>
            <div class="dropdown">
                <button class="categories-btn btn btn-secondary text-justify mr-3" type="button" id="dropdown-categories" {{-- data-toggle="dropdown" --}} aria-haspopup="true" aria-expanded="false" @click="openCategoriesDropdown">
                    <span class="pl-4 ml-2">Categories</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <div class="white-circle"></div>
                <div class="dropdown-menu text-center" :class="{'show': showCategoriesDropdown}" aria-labelledby="dropdown-categories">
                    <form>
                        @foreach ($categories as $category)
                        <label class="dropdown-item mb-0">
                           <input type="radio" name="category" value="Funny" v-model="category">
                           <span>{{ $category->name }}</span>
                        </label>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
        <button v-if="!showCategoriesDropdown" class="my-2 my-sm-0 mr-3 filter-button" :class="{'ml-auto mr-3': !showCategories}" @click="displayCategories">
            <span v-if="!showCategories">Filter</span>
            <span v-else>Close</span>
        </button>
        <button v-if="showCategoriesDropdown" class="my-2 my-sm-0 mr-3" :class="{'filter-button': !category, 'apply-button': category}" :disabled="!category" @click="applyCategory">Apply</button>
    </div>
</nav>


{{-- MOBILE NAVBAR --}}
<nav class="navbar navbar-expand justify-content-between d-lg-none">
    <button class="btn sidebar-toggle" @click="openSidebar">
        <svg class="bi bi-layout-sidebar" width="22px" height="22px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
            <path fill-rule="evenodd" d="M4 14V2h1v12H4z"/>
        </svg>
    </button>
    <img class="logo-img ml-lg-2" src="/images/BTCLogoPrimary.png">
    <button class="filter-btn" data-toggle="modal" data-target="#categoriesModal" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter"></i></button>
</nav>
