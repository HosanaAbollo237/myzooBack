import React, {Component} from 'react'
import {BrowserRouter,Switch, Route} from 'react-router-dom'

import appCss from './../public/css/app.css'

import Site from './containers/Site/Site'
import Navbar from '../src/components/UI/Navbar/Navbar'
import Header from '../src/components/UI/Header/Header'
import Footer from '../src/components/UI/Footer/Footer'
import Error from '../src/components/UI/Error/Error'
import Accueil from '../src/components/Accueil/Accueil'
import Animal from '../src/components/Animals/Animal/Animal'
import Animals from '../src/components/Animals/Animals'
import Parc from './containers/Parc/Parc'
import Continents from '../src/components/Continents/Continents'


class App extends Component{

    Routes(){
        return(
        <Switch>
            <Route path='/animal/:id' render={() => <Animal />} />
            <Route path='/animals' render={() => <Parc title="Les animaux du parc" />} />
            <Route path='/continents' render={()=><Continents title='Page des Continents' />} />
            <Route path='/' exact render={()=> <Accueil />} />
            <Route render={() => <Error /> } />
        </Switch>
        ) 
    }
    
    render(){
        return(
            <BrowserRouter>         
                <Header>
                    <Navbar /> 
                </Header>

                <Site routes={this.Routes()} /> 

                <Footer />

            </BrowserRouter>
        )
    }
    

}


export default App;