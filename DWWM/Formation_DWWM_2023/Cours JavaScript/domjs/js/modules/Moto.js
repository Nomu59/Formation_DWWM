import Vehicule from './Vehicule.js'

// Classe Moto
export default class Moto extends Vehicule{
    display(){
        return `Moto - ${super.display()}`;
    }
}