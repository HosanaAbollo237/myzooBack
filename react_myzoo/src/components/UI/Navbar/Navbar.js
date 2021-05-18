import React from 'react'
import { Link } from 'react-router-dom'
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
                        <Link to="/" className="NavLink"> Home </Link>
                    </li>
                    <li className="menuItem">
                        <Link to='/animals'> Animals </Link>
                    </li>
                    <li className="menuItem"> 
                        <Link to="/continents"> Continent </Link>
                    </li>
                </ul>
            </nav> 
    )
}

export default Navbar