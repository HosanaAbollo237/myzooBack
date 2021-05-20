import React, { Component } from 'react';
import Title from '../../components/UI/Title/Title'
import axios from 'axios'

class Parc extends Component{
  state = {
    animaux: null
  }

  getAnimals = () => {
    axios.get('http://localhost/myzoo/front/animals')
      .then(response =>( console.log(response)))
  }
  render() {

    return (
      <>
        <Title>{this.props.title}</Title>
        <div>
            Page listant les animaux du zoo
        </div>
      </>
    );
  };
};

export default Parc;