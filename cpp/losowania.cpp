#include <cstdlib>
#include <iostream>

using namespace std;

int main()
{
    srand(time(NULL));
    int duzyLotek, malyLotek, los;
    int duzy[6],maly[5];
    for(int i=0;i<=6;i++){
    los=rand()%49+1;
    duzy[i]=los;
    }
    for(int j=0;j<5;j++){
    los=rand()%49+1;
    maly[j]=los;    
    }
    cout << "Wyniki: \n";
    cout << "Duzy Lotek: ";
    for(int k=0;k<6;k++){
    cout << duzy[k] << ", ";    
    }
    cout << "\nMaly Lotek: ";
    for(int l=0;l<5;l++){
    cout << maly[l] << ", ";    
    }
    cout << "\n";
    system("PAUSE");
    return EXIT_SUCCESS;
}
