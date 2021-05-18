import React from 'react'
import { Switch, Route } from 'react-router-dom';

import Animals from '../components/Animals/Animals'
import Animal from '../components/Animals/Animal/Animal'
import Continents from '../components/Continents/Continents'
import Accueil from '../components/Accueil/Accueil'
import Error from '../components/UI/Error/Error'

const Routes = (props) => {
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

export default Routes