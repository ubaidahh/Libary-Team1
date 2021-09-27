package com.perpustakaan.projekperpustakaan.services;

import com.perpustakaan.projekperpustakaan.models.Buku;
import com.perpustakaan.projekperpustakaan.repositories.BukuRepositories;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.io.BufferedReader;
import java.util.ArrayList;
import java.util.List;

@Service
public class BukuServices {

    private final BukuRepositories bukuRepositories;

    @Autowired
    public BukuServices(BukuRepositories br){
        this.bukuRepositories = br;
    }

    public List<Buku> showAll(){
        List<Buku> lstBuku = bukuRepositories.findAll();
        return lstBuku;
    }

    public List<Buku> createBuku(Buku buku){
        bukuRepositories.save(buku);
        return bukuRepositories.findAll();
    }

    public boolean update(Buku bk){
        bukuRepositories.save(bk);
        return true;
    }

    public void deleteBuku(String id){
        bukuRepositories.deleteById(id);
    }
}
