import React from 'react'
import { NavLink } from 'react-router-dom'
import Routes from '../../../Routes/Routes'
import NavCSS from '../../../../public/css/navCss.css'
import logo from '../../../assets/images/logo.png'
import Img from '../Picture/Image/Image'

const Navbar = (props) => {

    
    return(
            <nav>     
                <ul className="menu">
                    <li>
                        <a className="NavLink" href="">
                            <Img src={logo} 
                                 alt='Logo MyZoo'
                                 width="100px"
                                 height="100px"/>
                        </a>
                    </li>
                    <li className="menuItem">
                        <NavLink to="/" className="NavLink"> Home </NavLink>
                    </li>
                    <li className="menuItem">
                        <NavLink to='/animals'> Animals </NavLink>
                    </li>
                    <li className="menuItem"> 
                        <NavLink to="/continents"> Continent </NavLink>
                    </li>
                </ul>
            </nav> 
    )
}

export default Navbar