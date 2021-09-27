package com.perpustakaan.projekperpustakaan.controllers;

import com.perpustakaan.projekperpustakaan.models.Buku;
import com.perpustakaan.projekperpustakaan.services.BukuServices;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.io.BufferedReader;
import java.util.List;

@RestController
@RequestMapping("/buku")
public class BukuController {

    private final BukuServices bukuServices;

    @Autowired
    public  BukuController(BukuServices bs){
        this.bukuServices = bs;
    }

    @GetMapping("/get")
    public ResponseEntity<List<Buku>> showAllBuku(){
        List<Buku> lstBuku = bukuServices.showAll();
        return new ResponseEntity<>(lstBuku, HttpStatus.ACCEPTED);
    }

    @PostMapping("/create")
    public ResponseEntity<List<Buku>> createBuku(@RequestBody Buku bk){
        List<Buku> lstBk = bukuServices.showAll();
            for (Buku b : lstBk){
                if (b.getJudulBuku().equals(bk.getJudulBuku())){
                    return new ResponseEntity<>(lstBk,HttpStatus.BAD_REQUEST);
                }
            }
        List<Buku> lstBuku = bukuServices.createBuku(bk);
        return new ResponseEntity<>(lstBuku,HttpStatus.CREATED);
    }

    @PutMapping("/update")
    public ResponseEntity<Object> update(@RequestBody Buku bk){
        return new ResponseEntity<>(bukuServices.update(bk),HttpStatus.OK);
    }

    @PostMapping("/delete/{id}")
    public ResponseEntity<?> delete(@PathVariable("id")String id){
        bukuServices.deleteBuku(id);
        return new ResponseEntity<>(HttpStatus.OK);
    }

}
