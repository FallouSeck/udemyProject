import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { NouveauComponent } from './nouveau/nouveau.component';
import { PremierComposantComponent } from './nouveau/premier-composant.component';
import { DeuxiemeComposantComponent } from './nouveau/deuxieme-composant.component';
import { TroisiemeComposantComponent } from './nouveau/troisieme-composant.component';
import { QuatriemeComposantComponent } from './nouveau/quatrieme-composant.component';

@NgModule({
  declarations: [
    AppComponent,
    NouveauComponent,
    PremierComposantComponent,
    DeuxiemeComposantComponent,
    TroisiemeComposantComponent,
    QuatriemeComposantComponent,
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
