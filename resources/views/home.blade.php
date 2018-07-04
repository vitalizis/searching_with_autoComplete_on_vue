<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Search with Laravel Scout and Vue.js!</title>
</head>
<body>
    <div class="container">
        <div class="well well-sm">
            <div class="form-group">
                <div class="input-group input-group-md">
                    <div class="icon-addon addon-md">
                        <input type="text" placeholder="What are you looking for?" class="form-control" v-model="query" v-on:keyup="autoComplete">
                        <div class="panel-footer" v-if="results.length">
                         <ul class="list-group">
                            <li class="list-group-item" v-for="result in results">
                               @{{ product.name }}
                           </li>
                       </ul>
                   </div>
               </div>
               <span class="input-group-btn">
                <button class="btn btn-default" type="button" v-if="!loading" @click="search()">Search!</button>
                <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
            </span>
        </div>
    </div>
</div>

<div class="alert alert-danger" role="alert" v-if="error">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    @{{ error }}
</div>
<div id="products" class="row form-group">
    <div class="item col-xs-12 col-lg-12" v-for="product in products">
      <!-- <p class="group inner list-group-item-text">@{{ product.description }}</p> -->
      <div>Name: @{{ product.name }}</div>
      <div>Description: @{{ product.description }}</div>
  </div>
  <br>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html