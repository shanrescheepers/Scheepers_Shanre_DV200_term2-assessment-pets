// IMPORTS
import axios from "axios";
import { useState } from 'react'

// FUNCTION
function App() {
  const [selectedOption, setSelectedOption] = useState({});
  const [PetData, setPetData] = useState({});

  const handleChange = (event) => {
    // event.preventDefault()
    const name = event.target.name;
    const value = event.target.value;
    setPetData(petData => ({ ...petData, [name]: value }));
  }

  const handleSubmit = (event) => {
    event.preventDefault();
    console.log(PetData);

    // http://localhost:8888/phpMyAdmin5/index.php?route=/database/sql&db=pets
    axios.post('http://localhost:8888/petapi/pets', PetData)
      .then((res) => {
        // http header response from my doc
        console.log(res);
      })
      .catch((error) => {
        console.log(error);
        // console.log("There was an error");
      });
  }

  //     $petName = $data->petName; //->names is keyavluepair we saved in the payload, decouling this from json array
  // $petSpecie = $data -> petSpecie;
  // $gender = $data -> gender;
  // $age = $data -> age;
  // $petMicroId = $data -> petMicroId;
  // $owner = $date -> owner;
  // $ownerId = $data -> ownerId;
  // $origin = $data -> origin;
  // $destination = $data -> destination;

  return (
    <div className="App">
      <div className="formCon">
        <h1>Expawts: Pet Relocation</h1>
        <p>Sign up below and we will send you a quote!</p>
        <form>
          <input onChange={handleChange} name='petName' type='text' placeholder="Name of Pet" />
          <select onChange={handleChange} name='petSpecie'>
            <option selected disabled hidden  >Species of Pet</option>
            <option>Canine</option>
            <option>Feline</option>
            <option>Equine</option>
            <option>Rodent</option>
            <option>Avian</option>
            <option>Reptile</option>
          </select>
          <select onChange={handleChange} name='gender' type='text'>
            <option selected disabled hidden>Gender/Sex of Pet</option>
            <option>Male</option>
            <option>Female</option>
          </select>
          <input onChange={handleChange} name='age' type='number' placeholder="Age of Pet (years) " />
          <input onChange={handleChange} name='petMicroId' type='text' placeholder="Pet MicroChip Id" />
          <input onChange={handleChange} name='owner' type='text' placeholder="Pet Owner Name" />
          <input onChange={handleChange} name='ownerId' type='number' placeholder="Pet Owner ID Number" />
          <input onChange={handleChange} name='origin' type='text' placeholder="Export Origin" />
          <input onChange={handleChange} name='destination' type='text' placeholder="Export Destination" />

          <button onClick={handleSubmit} type='submit'>Lets Export That Pet!</button>


        </form>

      </div>
    </div>
  );
}

export default App;
