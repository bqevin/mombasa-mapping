


//ADDING FEATURES ONTO MAP

//Declare Endpoint
var dbRef = new Firebase('https://mombasa-e7658.firebaseio.com');

//FEATURES CONTAINER

//Create holder array for objects
var featureRef = dbRef.child('features');
  featureRef.on("child_added", function(snap) {
    console.log("added", snap.key, snap.val());
    //document.querySelector('#features').innerHTML += (retrieveFeatures(snap.val()));
  });

  //save feature
  document.querySelector('.addFeature').addEventListener("click", function( event ) {
    event.preventDefault();
    if(document.querySelector('#type').value != '' || document.querySelector('#photo_url').value != ''  || document.querySelector('#lat').value != '' || document.querySelector('#long').value != '' || document.querySelector('#desc').value != '' || document.querySelector('#title').value != ''){
      featureRef
        .push({
          title: document.querySelector('#title').value,
          long: document.querySelector('#long').value,
          lat: document.querySelector('#lat').value,
          description: document.querySelector('#desc').value,
          photo_url: document.querySelector('#photo_url').value,
          type: document.querySelector('#type').value
        });
        featureForm.reset();
        alert('Featue added successfully!');
    } else {
      alert('Please fill all details correctly!');
    }
  }, false);

  //retrieve Features
  function retrieveFeatures(features){
    console.log(features);
    var html = '';
      html += '<li class="collection-item avatar">';
      html += '<i class="material-icons circle green">insert_chart</i>';
        html += '<span class="title">'+features.title+'</span>';
        html += '<p>'+features.description+'</p>';
        html += '<a href="#!" class="secondary-content"><i class="material-icons">grade</i>';
        html += '</a></li>';
    return html;
  }
