import React, {Component} from 'react'
import {BrowserRouter,Switch, Route} from 'react-router-dom'

import Routes from '../src/Routes/Routes'
import Site from './containers/Site/Site'
import Navbar from '../src/components/UI/Navbar/Navbar'
import Header from '../src/components/UI/Header/Header'
import Footer from '../src/components/UI/Footer/Footer'
import Error from '../src/components/UI/Error/Error'
import Accueil from '../src/components/Accueil/Accueil'
import Animal from '../src/components/Animals/Animal/Animal'
import Animals from '../src/components/Animals/Animals'
import Continents from '../src/components/Continents/Continents'


class App extends Component{

    switchRouter(){
        return(
      
        <Switch>
            <Route path='/animal/:id' render={() => <Animal />} />
            <Route path='/animals' render={() => <Animals title="Page des animaux" />} />
            <Route path='/continents' render={()=><Continents title='Page des Continents' />} />
            <Route path='/' exact render={()=> <Accueil />} />
            <Route render={() => <Error /> } />
        </Switch>
        ) 
    }
    
    render(){
        return(
            <>
                <BrowserRouter>
                <Header>
                    <Navbar /> 
                </Header>

                <Site>  
                    {this.switchRouter()}
                </Site>
                </BrowserRouter>
                <Footer> Footer </Footer>
            </>
        )
    }
    

}


export default App;