import {Component} from '@angular/core'

@Component({
    selector: 'troisieme-composant',
    template: `<div>
                    <h2> 3e composant réussi {{nom}}</h2> 
    </div>`,
    styles: [`h2 {color:blue`]
})
export class TroisiemeComposantComponent {}