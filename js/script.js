// wrong-true icon show-hide

document.querySelector('.sign-up-form').addEventListener('keyup', function (event) {
	var elem = event.target;
	if(event.target.matches('input')){
		var unchecked = elem.parentNode.children[3];
	    var checked = elem.parentNode.children[2];
	    console.log(elem.closest('.fa-exclamation-circle'));
		if (event.target.validity.valid) {
          unchecked.style.visibility = "hidden";
  	      checked.style.visibility = "visible";
}else{
	unchecked.style.visibility = "visible";
  	checked.style.visibility = "hidden";
	}
}
})

// sign-in and sign-up forms change

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container= document.querySelector(".container");

sign_up_btn.addEventListener('click',() =>{
    container.classList.add("sign-up-mode");

});

sign_in_btn.addEventListener('click',() =>{
    container.classList.remove("sign-up-mode");
});

// form validation occur in html

/*  username regex

	^[a-zA-Z0-9]    # start with an alphanumeric character
  (                 # start of (group 1)
    [._-](?![._-])  # follow by a dot, hyphen, or underscore, negative lookahead to
                    # ensures dot, hyphen, and underscore does not appear consecutively
    |               # or
    [a-zA-Z0-9]     # an alphanumeric character
  )                 # end of (group 1)
  {1,18}            # ensures the length of (group 1) between 1 and 18
  [a-zA-Z0-9]$      # end with an alphanumeric character

                    # {1,18} plus the first and last alphanumeric characters,
                    # total length became {3,20}
 */

    

     