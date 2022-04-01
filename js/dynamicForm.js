//This is the parent where the forms are going to spawn!
const form = document.querySelector(".dynamic-form");
form.innerHTML ='';
  	//Listinning for any change on the switcher
  	//Then depending on the change we render the form
  	const sel = document.getElementById("productType");
  	sel.addEventListener('change',e => {
         Lol(e.target.value);
  	});
function Lol(value) {
if(value === "Book")
{
   const markup =`   
    <div class="type-form Book">
          <div class="details ">
              <div class="labels">
                 <label>Weight (KG)</label>
            </div>
              <div class="inputs">
                    <input  oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')" required="true"  id="weight" type="text" name="weight">
              </div> 
          </div>
          <div class="descrip">Please provide us with the book weight</div>
        </div>

   `;
   form.innerHTML='';
    form.insertAdjacentHTML("afterbegin",markup);
}

if(value=== 'Furniture')
{
   const markup =`
 <!-- Furniture form -->
         <div class="type-form Furniture">
          <div class="details">
              <div class="labels">
                 <label>Height (CM)</label>
                 <label>Width (CM)</label>
                 <label>Length (CM)</label>
            </div>
              <div class="inputs">
                    <input  oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')" required="true" id="height" type="text" name="height">
                    <input  oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')" required="true" id="width" type="text" name="width">
                    <input  oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')" required="true" id="length" type="text" name="length">
              </div> 
          </div>
          <div class="descrip">Please provide dimensions in HxWxL format</div>
        </div>
      </div>

   `;
    form.innerHTML='';
    form.insertAdjacentHTML("afterbegin",markup);
}

if(value === 'DVD')
      {
          const markup = `

              <!-- DVD form -->
        <div class="type-form DVD">
          <div class="details ">
              <div class="labels">
                 <label>Size (MB)</label>
            </div>
              <div class="inputs">
                    <input  oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')" required="true" id="size" type="text" name="size">
              </div> 
          </div>
          <div class="descrip">Please provide us with the dvd size</div>
        </div>
          `;
           form.innerHTML='';
    form.insertAdjacentHTML("afterbegin",markup);

      }
  }