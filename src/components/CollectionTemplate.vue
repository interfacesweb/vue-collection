<template>

  <!-- This component will build a web form to display the collection.template available in the 'template' prop. This form will be bound to the 'template' prop. When the form is submitted, the method 'createItem' will be called to send the data to the server and create a new item. -->

  <!-- How to bind form inputs to data: https://vuejs.org/v2/guide/forms.html -->

  <!-- Listening to events: https://vuejs.org/v2/guide/events.html -->

  <div>
    <h3>Template component</h3>
  </div>

</template>

<script>
 // Module to make AJAX calls to API server
 import axios from 'axios';

 export default {
   name: 'CollectionTemplate',
   // Component props https://vuejs.org/v2/guide/components.html#Props
   props: [
     // This prop stores the collection.href property
     'createurl',
     // This prop stores the collection.template object
     'template'
   ],
   data: function() {
     return {
     }
   },
   components: {
   },
   methods: {
     createItem: function() {
       // Method to do a POST request to create an item in a collection
	     // The POST request must be sent to the collection.href property of the collection object
	     // It must be called when the user clicks on the CREATE ITEM button
	     // It must send the TEMPLATE object of the collection with the data filled by the user
	     // http://amundsen.com/media-types/collection/examples/#ex-write

       // Post to the collection url, available in this.createurl
       // We send the 'template' prop, which is bound to the form
       axios.post(this.createurl, {template: this.template})
            .then(function (response) {
              // Emit an event to read again the collection
              // The App component will listen to the 'refresh' event and it will call the readCollection method
              this.$emit('refresh', this.createurl);
            }.bind(this))
            .catch(e => {
              // If error, display in console
              console.log(e);
            });
     }
   }
 }
</script>

<style scoped>

</style>
