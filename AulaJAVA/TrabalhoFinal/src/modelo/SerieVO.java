/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

import java.util.ArrayList;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class SerieVO {
    private long idSerie; 
    private String nomeserie;
    private String diretorserie;
    private int anoserie;
    private String generoserie;
    private String positivoserie;
    private String negativoserie;
    private String mediaserie;

    public SerieVO() {
    }

    public SerieVO(long idSerie, String nomeserie, String diretorserie, int anoserie, String generoserie, String positivoserie, String negativoserie, String mediaserie) {
        this.idSerie = idSerie;
        this.nomeserie = nomeserie;
        this.diretorserie = diretorserie;
        this.anoserie = anoserie;
        this.generoserie = generoserie;
        this.positivoserie = positivoserie;
        this.negativoserie = negativoserie;
        this.mediaserie = mediaserie;
    }

    public long getIdSerie() {
        return idSerie;
    }

    public void setIdSerie(long idSerie) {
        this.idSerie = idSerie;
    }

    public String getNomeserie() {
        return nomeserie;
    }

    public void setNomeserie(String nomeserie) {
        this.nomeserie = nomeserie;
    }

    public String getDiretorserie() {
        return diretorserie;
    }

    public void setDiretorserie(String diretorserie) {
        this.diretorserie = diretorserie;
    }

    public int getAnoserie() {
        return anoserie;
    }

    public void setAnoserie(int anoserie) {
        this.anoserie = anoserie;
    }

    public String getGeneroserie() {
        return generoserie;
    }

    public void setGeneroserie(String generoserie) {
        this.generoserie = generoserie;
    }

    public String getPositivoserie() {
        return positivoserie;
    }

    public void setPositivoserie(String positivoserie) {
        this.positivoserie = positivoserie;
    }

    public String getNegativoserie() {
        return negativoserie;
    }

    public void setNegativoserie(String negativoserie) {
        this.negativoserie = negativoserie;
    }

    public String getMediaserie() {
        return mediaserie;
    }

    public void setMediaserie(String mediaserie) {
        this.mediaserie = mediaserie;
    }

    @Override
    public String toString() {
        return "SerieVO{" + "idSerie=" + idSerie + ", nomeserie=" + nomeserie + ", diretorserie=" + diretorserie + ", anoserie=" + anoserie + ", generoserie=" + generoserie + ", positivoserie=" + positivoserie + ", negativoserie=" + negativoserie + ", mediaserie=" + mediaserie + '}';
    }

    
}//fecha classe
