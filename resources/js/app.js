require('./bootstrap');

import QuotesList from './components/quotes.vue'

const app = new  Vue({
    components: { QuotesList },

    data() {
        return {
            activeTab: 'quotes',
            showCategories: false,
            showCategoriesDropdown: false,
            sidebarOpen: false,
            category: null,
            selectedCategoryId: null
        }
    },

    methods: {
        switchTab: function(tab) {
            this.activeTab = tab;
        },

        switchTabSidebar: function(tab) {
            this.activeTab = tab;
            this.openSidebar()
        },

        openSidebar: function() {
            $('.sidebar-toggle').toggleClass('active');
            if(this.sidebarOpen == true) {
                this.sidebarOpen = false
            } else {
                this.sidebarOpen = true
            }
            if (window.innerWidth < 601) {
                $('.background-container3').toggleClass('sidebar-open')
                $('.navbar').toggleClass('sidebar-open')
            }
        },

        share: function(id) {
            $('#' + id).addClass('selected');
            $('#' + id).children('.shareButtons-day').removeClass('d-none');
        },

        closeShare: function(id) {
            $('#' + id).removeClass('selected');
            $('#' + id).children('.shareButtons-day').addClass('d-none');
        },

        openModal: function() {
            $('#videoModal').modal('show');
        },

        openQuoteModal: function() {
            $('#quoteModal').modal('show');
        },

        displayCategories: function() {
            if(this.showCategories == true) {
                this.showCategories = false
            } else {
                this.showCategories = true
            }
        },

        applyCategory: function() {
            this.showCategories = false
            this.showCategoriesDropdown = false
            $('.background-container2').removeClass('dropdown-open')
        },

        openCategoriesDropdown: function(e) {
            if(this.showCategoriesDropdown == true) {
                this.showCategoriesDropdown = false
            } else {
                this.showCategoriesDropdown = true
            }
            $('.background-container2').toggleClass('dropdown-open')
        },

        onCategorySelect(categopryId) {
            this.selectedCategoryId = categopryId
        }
    }
}).$mount('#app');
