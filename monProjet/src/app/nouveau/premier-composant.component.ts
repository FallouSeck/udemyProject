import {Component} from '@angular/core'

@Component({
    selector: 'premier-composant',
    template: `<div>
                    <h2> 1er composant réussi {{nom}}</h2> 
    </div>`,
    styles: [`h2 {color:green`]
})
export class PremierComposantComponent {}