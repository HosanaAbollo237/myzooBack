import React, { Component, useEffect } from 'react';
import Title from '../../components/UI/Title/Title'
import axios from 'axios'

class Parc extends Component{
  state = {
    animals: {}
  }
  
   datas = null;

  componentDidMount = () => {
      this.setApiState(this.state)
      console.log("VERIFIER LE STATE AVEC DEV TOOLS")
  }


  setApiState = (aState, aProps) => {
    const newState = {...aState}
    axios.get('http://localhost/myzoo/front/animals')
    .then(response => {
       aState = response.data
       this.setState({
        animals: aState
       })
    })
  }

  render() {
    return (
      <>
        <Title>{this.props.title}</Title>
        <div>
            Page listant les animaux du zoo
        </div>
        <div>
        </div>
      </>
    );
  };
};

export default Parc;