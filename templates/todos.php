<div class="list">
  <h1 ng-click="helloWorld()">My TODOs!</h1>
  <div class="add">
    <a href="" ng-click="addTodo()">+ Add a New Task</a>
  </div>

    <div class="item" ng-class="{'editing-item': editing,
     'edited': todo.edited, 'completed': todo.completed}"
      ng-repeat="todo in todos | orderBy: 'completed' "
      ng-init="todo.completed = false">
    <!-- <div ng-repeat="todo in todos"> -->
    <input ng-model="todo.completed" type="checkbox"/>
    <span ng-click="todo.completed = !todo.completed"></span>
    <label ng-hide="editing" class="editing-label" ng-click="helloWorld()">{{todo.name}}</label>
    <input ng-change="todo.edited = true" ng-blur="editing = false;" ng-show="editing" ng-model="todo.name" class="editing-label" type="text"/>
    <div class="actions">
      <!-- You could use buttons instead of anchor tags. The choice
      is up to you. -->
      <a href="" ng-click=" editing = !editing">Edit</a>
      <a href="" ng-click="saveTodo()">Save</a>
      <a href="" ng-click="deleteTodo(todo, $index)" class="delete">Delete</a>
    </div>
    </div>
  {{todos}}
</div>

<!-- <hello-world></hello-world>   -->
<!-- The directive can be either an HTML tag or an attribute of a tag -->
<!-- <div hello-world></div> -->
