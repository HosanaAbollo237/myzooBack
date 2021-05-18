import React, {Component} from 'react'
import {Switch, Route} from 'react-router-dom'

//import Routes from '../src/Routes/Routes'
import banner from './assets/images/banderole.png'
import Site from './containers/Site/Site'
import Navbar from '../src/components/UI/Navbar/Navbar'
import Header from '../src/components/UI/Header/Header'
import Error from '../src/components/UI/Error/Error'
import Accueil from '../src/components/Accueil/Accueil'
import Animal from '../src/components/Animals/Animal/Animal'
import Animals from '../src/components/Animals/Animals'
import Continents from '../src/components/Continents/Continents'


class App extends Component{

    
    render(){
        return(
            <>
                <Header>
                    <Navbar /> 
                </Header>

                <Site>  
                    <Switch>
                        <Route path='/animal/:id' render={() => <Animal />} />
                        <Route path='/animals' render={() => <Animals title="Page des animaux" />} />
                        <Route path='/continents' render={()=><Continents title='Page des Continents' />} />
                        <Route path='/' exact render={()=> <Accueil />} />
                        <Route render={() => <Error /> } />
                    </Switch> 
                </Site>
            </>
        )
    }
    

}


export default App;