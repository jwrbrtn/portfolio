
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
//Vue.component('tabs', require('./components/Tabs.vue'));
//Vue.component('tab', require('./components/Tab.vue'));





Vue.component('tabs', {
    template: `
    <div>
      <div class="tabs">
        <ul>
          <li v-for="tab in tabs" v-bind:class="{'is-active': tab.isActive}">
            <a @click="selectTab(tab)">
              {{ tab.name }}
            </a>
           </li>
        </ul>
      </div>
      <div class="tab-details">
        <slot></slot>
      </div>
    </div>
  `,
    data() {
      return {
        tabs: [],
      }
    },
    created() {
      this.tabs = this.$children;
    },
    methods: {
      selectTab(selectedTab) {
       this.tabs.forEach(
        function(tab){
          tab.isActive = (selectedTab.name == tab.name)
        }
       ) 
      }
    }
  });
  
  Vue.component('tab', {
    template: `
      <div v-show="isActive">
        <slot>
        </slot>
      </div>
  `,
    props: {
      name: {
        required: true,
      },
      selected: {
        default: false
      }
    },
    data() {
      return {
        isActive: false
      }
    },
    mounted() {
      this.isActive = this.selected;
    }
  });
    
  
  new Vue({
    el: "#root",
  })



  