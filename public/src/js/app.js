'use strict';

var $ = window.$ = window.jQuery = require('jquery');
require('foundation');

var HomeView = require('./views/HomeView.js');
var TopNavView = require('./views/TopNavView.js');
var PostView = require('./views/PostView');
var PostModel = require('./models/')

$(document).on('ready', function() {
	$(document).foundation();

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  var topNavView = new TopNavView();
  $('#nav').html(topNavView.el);
  topNavView.render();

  var homeView = new HomeView();
  $('#content').html(homeView.el);
  homeView.render();
  
  var AppRouter = Backbone.Router.extend({
    routes: {
      '/': 'home',
      '': 'home',
      'post': 'post'
    },
    
    home: function() {
      var homeView = new HomeView();
      $('#content').html(homeView.el);
      homeView.render();
    }

    post: function() {
      var post = new PostModel({ id: id });
      post.fetch();    
      var postView = new PostView({
        model: ost
      });
      $('#content').html(postView.el);
      postView.render();
    }

  });
  
  var router = new AppRouter();
  Backbone.history.start();

})






