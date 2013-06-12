/*
 * All the plugins init are in this file
 **/
var map;
$(document).ready(function() {
  
  // activate the second carousel
  $('#slider-carousel').carousel();
  $('#testimonials-carousel').carousel();
  
  // init the google map plugin
  map = new GMaps({
    el: '#map',
    lat: -12.043333,
    lng: -77.028333
  });
  map.setContextMenu({
    control: 'map',
    options: [{
      title: 'Add marker',
      name: 'add_marker',
      action: function(e){
        this.addMarker({
          lat: e.latLng.lat(),
          lng: e.latLng.lng(),
          title: 'New marker'
        });
        this.hideContextMenu();
      }
    }, {
      title: 'Center here',
      name: 'center_here',
      action: function(e){
        this.setCenter(e.latLng.lat(), e.latLng.lng());
      }
    }]
  });
  map.setContextMenu({
    control: 'marker',
    options: [{
      title: 'Center here',
      name: 'center_here',
      action: function(e){
        this.setCenter(e.latLng.lat(), e.latLng.lng());
      }
    }]
  });

  
 