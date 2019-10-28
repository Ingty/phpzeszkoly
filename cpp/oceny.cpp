#include <cstdlib>
#include <iostream>
#include <vector>
#include <string>

using namespace std;

int main()
{
    float wynik = 0;
    int ocena;
    vector <int> oceny;
    int i=0;
    string temp;
    bool stanPetli = true;
    while(stanPetli){
    cout << "Wprowadz ocene (ndst, dop, dst, db, bdb, koniec): ";
    cin >> temp;
    if(temp=="ndst"||temp=="dop"||temp=="dst"||temp=="db"||temp=="bdb"){
        if(temp=="ndst") ocena=1;
        else if(temp=="dop") ocena=2;
        else if(temp=="dst") ocena=3;
        else if(temp=="db") ocena=4;
        else if(temp=="bdb") ocena=5;
        oceny.push_back(ocena);
    }
    else if(temp=="koniec"){
    stanPetli = false;    
    }
    else{
        cout << "Blad!\n";
        system("PAUSE");
        return 0;
    }
    }
    int sum = 0;
    for(int j=0;j<oceny.size();j++){
        sum += oceny[j];
    }
    wynik=(float)sum/(float)(oceny.size()-1);
    cout << "Wynik: " << wynik << endl;
    system("PAUSE");
    return EXIT_SUCCESS;
}
