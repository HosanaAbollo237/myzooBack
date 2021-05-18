import React, {Component} from 'react'
import Routes from '../../Routes/Routes'
import logo from '../../../src/assets/images/logo.png'
import Img from '../../components/UI/Picture/Image/Image'
import Header from '../../components/UI/Header/Header'
import Navbar from '../../components/UI/Navbar/Navbar'
import NoSideBar from '../../components/UI/Main/NoSideBar'
import Footer from '../../components/UI/Footer/Footer'

 
import Accueil from '../../components/Accueil/Accueil'
import Continents from '../../components/Continents/Continents'
import Animals from '../../components/Animals/Animals'
import Animal from '../../components/Animals/Animal/Animal'
import Error from '../../components/UI/Error/Error'


class Site extends Component
{
    render = (props) => {
        
        return(  
            <main id="main">
                {this.props.children}
            </main>
        )
    }
}



export default Site