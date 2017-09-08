$(document).ready(function (){
   $('#searchUser').on('keyup',function(e){
       let username=e.target.value;

       //Make ajax request to github api
       $.ajax({
           url:"https://api.github.com/users/"+username,
           data:{
               client_id:"70df0bbcc38f58e0030e",
               client_secret:"480f219322977e219b4a33219cc17b5de74fab40"
           }
       }).done(function(user){
          $('#profile').html(`
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">${user.name}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="${user.avatar_url}"  class="thumbnail avatar"/>
                            <a href="${user.html_url}" class="btn btn-primary btn-block" target="_blank">View Profile</a>
                        </div>
                        <div class="col-md-9">
                            <span class="label label-default">Public Repos: ${user.public_repos}</span>
                            <span class="label label-primary">Public Gists: ${user.public_gists}</span>
                            <span class="label label-success">Follower ${user.followers}</span>
                            <span class="label label-info">Following ${user.following}</span>
                            <br/>
                            <br/>
                            <ul class="list-group">
                                <li class="list-group-item">Company: ${user.company}</li>
                                <li class="list-group-item">Website: ${user.blog}</li>
                                <li class="list-group-item">Location: ${user.location}</li>
                                <li class="list-group-item">Member Since: ${user.created_at}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          `);
       });
   });
});