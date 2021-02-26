import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { AdminComponent } from './components/admin/admin/admin.component';
import { APP_BASE_HREF } from '@angular/common';
import { InicioComponent } from './components/inicio/inicio.component';
import { AdminEditComponent } from './components/admin/admin-edit/admin-edit.component';
import { FormsModule, ReactiveFormsModule  } from '@angular/forms';
import { AdminBlogComponent } from './components/admin/admin-blog/admin-blog.component';
import { AdminBlogEditComponent } from './components/admin/admin-blog-edit/admin-blog-edit.component';
import { BlogComponent } from './components/blog/blog.component';

import { HttpClientModule } from '@angular/common/http';




@NgModule({
  declarations: [
    AppComponent,
    AdminComponent,
    InicioComponent,
    AdminEditComponent,
    AdminBlogComponent,
    AdminBlogEditComponent,
    BlogComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule,  
  ],
  providers: [{provide: APP_BASE_HREF, useValue:''}],
  bootstrap: [AppComponent]
})
export class AppModule { }
